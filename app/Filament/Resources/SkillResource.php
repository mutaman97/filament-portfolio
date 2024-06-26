<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkillResource\Pages;
use App\Filament\Resources\SkillResource\RelationManagers;
use App\Models\Skill;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SkillResource extends Resource
{
    protected static ?string $model = Skill::class;
    protected static ?string $navigationIcon = 'heroicon-o-star';
    public static function getNavigationLabel(): string
    {
        return __('Skills');
    }
//    protected static ?string $navigationGroup = 'App Sections';
//    protected static ?int $navigationSort = 4;

    public static function getNavigationBadge(): ?string
    {
        if (static::getModel()::count() > 0) {
            return static::getModel()::count();
        }
        return null;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    CuratorPicker::make('logo')
                        ->maxSize(2000)
                        ->directory('public/skill')
                        ->helperText('The logo of the customer. Max 2MB')
                        ->label('Skill Logo')
                        ->required(),
                ]),
                Group::make()->schema([
                    Forms\Components\TextInput::make('name')
                        ->maxLength(100)
                        ->helperText('The name of the skill. Max 100 characters.')
                        ->label('Skill Name (optional)'),
                    Forms\Components\TextInput::make('rate')
                        ->maxLength(100)
                        ->helperText('The rate of the skill. Max 10 characters.'),
                    Forms\Components\TextInput::make('url')
                        ->maxLength(240)
                        ->helperText('The website URL of the customer. Max 240 characters.')
                        ->prefixIcon('heroicon-o-link')
                        ->prefix('https://www.')
                        ->columnSpan(2)
                        ->label('Website URL (optional)')
                        ->columnSpanFull(),
                ]),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
//                Stack::make([
                    CuratorColumn::make('logo')
                        ->label('Skill Logo')
                        ->size(90),
                    Tables\Columns\TextColumn::make('name')
                        ->searchable()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('rate')
                        ->sortable(),
                    Tables\Columns\TextColumn::make('url')
                        ->searchable()
                        ->sortable(),
//                ])
            ])
//            ->contentGrid([
//                'md' => 3,
//                'xl' => 5,
//            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\EditAction::make(),
                ])
            ])
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
            'index' => Pages\ListSkills::route('/'),
            'create' => Pages\CreateSkill::route('/create'),
            'edit' => Pages\EditSkill::route('/{record}/edit'),
        ];
    }
}
