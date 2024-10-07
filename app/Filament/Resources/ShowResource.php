<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShowResource\Pages;
use App\Filament\Resources\ShowResource\RelationManagers;
use App\Models\Show;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShowResource extends Resource
{
    protected static ?string $model = Show::class;

    protected static ?string $navigationIcon = 'heroicon-o-musical-note';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(500),
                SpatieMediaLibraryFileUpload::make('image')
                    ->collection('posters')
                    ->conversion('thumb'),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\DatePicker::make('scheduled_at')
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'draft'     => 'Draft',
                        'confirmed' => 'Confirmed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->default('confirmed')
                    ->required(),
                Forms\Components\TextInput::make('venue_name')
                    ->maxLength(500)
                    ->required(),
                Forms\Components\TextInput::make('venue_url')
                    ->maxLength(500),
                Forms\Components\TextInput::make('city')
                    ->maxLength(500)
                    ->required(),
                Forms\Components\TextInput::make('country')
                    ->maxLength(500)
                    ->required(),
                Forms\Components\Textarea::make('lineup'),
                Forms\Components\Select::make('galleries')
                    ->multiple()
                    ->columnSpan(2)
                    ->relationship('galleries', 'title'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('venue_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('scheduled_at')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('scheduled_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->paginated([10, 25, 50, 100, 'all'])
            ->defaultPaginationPageOption(50)
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListShows::route('/'),
            'create' => Pages\CreateShow::route('/create'),
            'edit' => Pages\EditShow::route('/{record}/edit'),
        ];
    }
}
